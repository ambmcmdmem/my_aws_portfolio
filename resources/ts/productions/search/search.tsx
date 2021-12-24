import React from 'react'
import ReactDOM from 'react-dom'
import SearchProcess from './searchProcess'
import { useEffect, useRef, useState } from 'react'
import SearchBox from './searchBox';
 
const App = () => {
  const [fetchProduct, setFetchProduct] = useState<string[]>([]);
  const isFirstRender = useRef(false);

  useEffect(() => {
    isFirstRender.current = true;
  }, []);

  useEffect(() => {
    if(isFirstRender) {
      isFirstRender.current = false;
    } else {
      
    }
  });
  
  return (
    <>
      <SearchBox />
      <SearchProcess productItems={fetchProduct}/>
    </>
  )
}
 
ReactDOM.render(
  <App />,
  document.getElementById('productListWrap')
)