import React from 'react'
import ReactDOM from 'react-dom'
import SearchProcess from './searchProcess'
import { useState, useEffect } from 'react'
import SearchBox from './searchBox';
import axios from 'axios';
 
const App = () => {
  const [productSearchTxt, setProductSearchTxt] = useState('');
  const [fetchProduct, setFetchProduct] = useState([]);
  const inputProductSearchTxt = (e: React.ChangeEvent<HTMLInputElement>) => {
    setProductSearchTxt(() => e.target.value);
  };

  const searchProduct = () => {
    axios
      .post('/api/productions', {
        name: productSearchTxt,
      })
      .then(res => {
        setFetchProduct(res.data);
      })
      .catch(() => {
        alert('失敗');
      });
  };
  
  return (
    <>
      <SearchBox inputProductSearchTxt={inputProductSearchTxt} searchProduct={searchProduct} />
      <SearchProcess productItems={fetchProduct}/>
    </>
  )
}
 
ReactDOM.render(
  <App />,
  document.getElementById('productListWrap')
)