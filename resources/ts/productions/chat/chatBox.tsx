import React from 'react'
import { ChatFunc as Props } from '../variables';

const ChatBox: React.VFC<Props> = (props) => {
  return (
    <>
      <input type="text" name="chatBody" onChange={(e) => props.inputChatTxt(e)} required />
      <button onClick={() => props.createChatContents()}>
        送信
      </button>
    </>
  )
}

export default ChatBox;
