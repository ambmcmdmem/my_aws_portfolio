import React from 'react'
import { ProductInfoArr as Props } from '../variables'
 
const SearchProcess: React.VFC<Props> = (props) => {
  return (
    <>
      <ul id="productList" className="d-flex flex-wrap">
        {props.productItems.map((productItem, productItemIndex) => {
          return (<li key={productItemIndex} className="w-25">
            <a href="{{ route('production.show', $production) }}">
                <img width="200" src="{ $production->getFirstImgPath() }}" alt={ productItem.name + "画像" } />
                <h3>{ productItem.name }</h3>
                <p>{ productItem.desc }</p>
                <p><strong>{ productItem.price }</strong></p>
            </a>
          </li>)
        })}
      </ul>
    </>
  )
}

export default SearchProcess;
