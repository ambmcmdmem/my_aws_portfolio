export type SearchBoxFunc = {
  inputProductSearchTxt: (e: React.ChangeEvent<HTMLInputElement>) => void,
  searchProduct: () => void
}
export type ProductInfoArr = {
  productItems: ProductInfo[]
}

export type ProductInfo = {
  id: number,
  user_id: number,
  name: string,
  desc: string,
  paid: number,
  price: number,
  purchase_user_id: number,
  created_at: string,
  updated_at: string
}


export type ChatFunc = {
  inputChatTxt: (e: React.ChangeEvent<HTMLInputElement>) => void,
  createChatContents: () => void
};