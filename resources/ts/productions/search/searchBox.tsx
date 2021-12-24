import React from 'react'
import { useState } from 'react';
import axios from 'axios';

type Props = {
  inputProductSearchTxt: (e: React.ChangeEvent<HTMLInputElement>) => void,
  searchProduct: () => void
}

const SearchBox: React.VFC<Props> = (props) => {
  return (
    <>
      <input type="text" name="productSearchTxt" placeholder="商品名" onChange={(e) => props.inputProductSearchTxt(e)} />
      <button onClick={() => props.searchProduct()}>
        <i className="fas fa-search"></i>
      </button>
    </>
  )
}

export default SearchBox;
