import React, { createContext, useState } from 'react';

export const CartContext = createContext()

const CartProvider = ({ children }) => {
  const [cart, setCart] = useState([])

  const addToCart = (id) => {
    console.log(`item ${id} added to the cart`)
  }

  return <CartContext.Provider value={{ addToCart }}>
    {children}
  </CartContext.Provider>
};

export default CartProvider;
