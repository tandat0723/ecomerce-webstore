import React from 'react';
import { Link } from 'react-router-dom';
import { IoMdAdd, IoMdClose, IoMdRemove } from 'react-icons/io';

const CartItem = ({ item }) => {
  //destructure item
  const { id, title, image, price, amount } = item

  return (
    <div className='flex'>
      <div className='w-full min-h-[150px] flex items-center gap-x-4'>
        <Link to={`/product/${id}`}>
          <img className='max-w-[80px]' src={image} alt='' />
        </Link>
        <div className='w-full flex flex-col'>
          {/* title & remove icon */}
          <div className='flex justify-between mb-2'>
            {/* title */}
            <Link
              to={`/product/${id}`}
              className='text-sm uppercase font-medium max-w-[240px] text-primary hover:underline'
            >
              {title}
            </Link>
            {/* remove icon */}
          </div>
          <div className='flex gap-x-2 h-[36px] text-sm'>
            {/* qty */}
            <div>Quantity</div>
            {/* item price */}
            <div>item price</div>
            {/* final price */}
            <div>final price</div>
          </div>
        </div>
      </div>
    </div>
  )
}

export default CartItem;
