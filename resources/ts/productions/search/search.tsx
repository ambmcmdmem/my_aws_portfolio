import React, { useState, useRef, useEffect } from 'react'
import ReactDOM from 'react-dom'
import SearchProcess from './searchProcess'
import SearchBox from './searchBox';
import axios from 'axios';
import { ProductInfo } from '../variables';

const App = () => {
  const productSearchTxt = useRef('');
  const [fetchProducts, setFetchProducts] = useState<ProductInfo[]>([]);
  const inputProductSearchTxt = (e: React.ChangeEvent<HTMLInputElement>) => {
    productSearchTxt.current = e.target.value;
  };

  const searchProduct = () => {
    axios
      .post('/api/productions', {
        name: productSearchTxt.current,
      })
      .then(res => {
        setFetchProducts(res.data);
      })
      .catch(() => {
        alert('失敗');
      })
      .finally(() => {

      });
  };

  useEffect(() => {
    searchProduct();
  }, [])
  
  return (
    <>
      <SearchBox inputProductSearchTxt={inputProductSearchTxt} searchProduct={searchProduct} />
      <SearchProcess productItems={fetchProducts}/>
    </>
  )
}
 
ReactDOM.render(
  <App />,
  document.getElementById('productListWrap')
)