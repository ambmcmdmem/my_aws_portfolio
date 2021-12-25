import React from 'react'
import { ProductInfoArr as Props } from '../variables'
 
const SearchProcess: React.VFC<Props> = (props) => {
  return (
    <>
      <ul>
        {props.productItems.map((productItem, productItemIndex) => {
          return <li key={productItemIndex}>{productItem.name}</li>
        })}
      </ul>
    </>
  )
}

export default SearchProcess;
