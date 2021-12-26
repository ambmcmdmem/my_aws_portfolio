import React from 'react'
import ReactDOM from 'react-dom'
import { useState, useEffect, useRef } from 'react'
import ChatBox from './chatBox'
import axios from 'axios'


type chatContent = {
  id: number,
  user_id: number,
  production_id: number,
  body: string,
  created_at: string,
  updated_at: string
};

const App = () => {
  const [chatContents, setChatContents] = useState<chatContent[]>([]);
  const chatPageWrapElement = document.getElementById('chatPageWrap');
  const chatPageId = chatPageWrapElement?.dataset.chatid;

  const chatTxt = useRef('');
  const inputChatTxt = (e: React.ChangeEvent<HTMLInputElement>) => {
    chatTxt.current = e.target.value;
  };

  if(chatPageId === undefined) {
    alert('getId is undefined');
    return <></>;
  }

  const chatPageIdOnlyNum = chatPageId.replace(/[^0-9]/g, '');
  const createChatContents = () => {
    const csrftoken = (document.getElementsByName('csrf-token')[0] as HTMLMetaElement).content;
    axios.defaults.headers.common['X-CSRF-TOKEN'] = csrftoken

    axios
      .post('/api/chatContents/' + chatPageIdOnlyNum + '/create', {
        chatBody: chatTxt.current
      })
      .then(res => {
        setChatContents([...chatContents, res.data])
      })
      .catch(err => {
        console.log(err);
      })
  };

  useEffect(() => {
    axios
      .post('/api/chatContents/' + chatPageIdOnlyNum)
      .then(res => {
        setChatContents(res.data);
      })
      .catch(err => {
        console.log(err);
      })
  }, []);
  

  return (
    <>
      <ul>
        {chatContents.map(chatContent => {
          return (<li key={chatContent.id}>
            {chatContent.body}
          </li>);
        })}
      </ul>
      <ChatBox inputChatTxt={inputChatTxt} createChatContents={createChatContents} />
    </>
  )
}
 
ReactDOM.render(
  <App />,
  document.getElementById('chatListWrap')
)