import React from 'react'
import ReactDOM from 'react-dom'

type Props = {
  productItems: string[]
}
 
const SearchProcess: React.VFC<Props> = (props) => {
  return (
    <>
      <ul>
        {props.productItems.map((productItem, productItemIndex) => {
          return <li key={productItemIndex}>{productItem}</li>
        })}
      </ul>
    </>
  )
}

export default SearchProcess;
