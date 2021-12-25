import React from 'react'
import { SearchBoxFunc as Props } from '../variables';

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
