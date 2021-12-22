
import React from 'react'
import ReactDOM from 'react-dom'
import { useState } from 'react'
 
const SearchProcess = () => {
  const [fetchProduct, setFetchProduct] = useState([]);
  const productListElement = fetchProduct.map((production) => {
    <li>{production}</li>
  });

  return (
    <>
      <ul>
        {productListElement}
      </ul>
    </>
  )
}

export default SearchProcess;
