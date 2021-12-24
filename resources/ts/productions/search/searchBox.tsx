import React from 'react'
import { useState } from 'react';
import axios from 'axios';

const SearchBox = () => {
  const [productSearchTxt, setProductSearchTxt] = useState('');
  const inputProductSearchTxt = (e: React.ChangeEvent<HTMLInputElement>) => {
    setProductSearchTxt(() => e.target.value);
  };

  const searchProduct = () => {
    // const token:string = (document.getElementsByName('csrf-token')[0] as HTMLMetaElement).content;

    // axios.defaults.headers.common["Authorization"] = token;
    axios
      .post('/api/productions', {
        name: productSearchTxt,
      })
      .then(response => {
        console.log(response);
      })
      .catch(() => {
        console.log('失敗');
      });
  };

  return (
    <>
      <input type="text" name="productSearchTxt" placeholder="商品名" onChange={inputProductSearchTxt} />
      <button onClick={searchProduct}>
        <i className="fas fa-search"></i>
      </button>
    </>
  )
}

export default SearchBox;
