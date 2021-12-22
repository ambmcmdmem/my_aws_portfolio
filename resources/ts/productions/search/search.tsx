import React from 'react'
import ReactDOM from 'react-dom'
import SearchProcess from './searchProcess'
 
const App = () => {
  return (
    <SearchProcess />
  )
}
 
ReactDOM.render(
    <App />,
    document.getElementById('productListWrap')
)