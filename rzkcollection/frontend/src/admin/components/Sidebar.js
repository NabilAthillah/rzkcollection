import React from 'react'

const Sidebar = () => {
  return (
    <div id='sidebarAdmin' className='w-1/5 fixed left-[10px]'>
        <div className='wrap h-1/3'>
            <p className='sidebarAdmin-text text-black capitalize font-bold text-lg h-9 border-b-[1px] border-[#434343]' >pesanan</p>
            <a href={'/private/admin/admins'} className='sidebarAdmin-text text-black capitalize pl-6 pt-3'>pesanan saya</a>
        </div>
        <div className='wrap flex flex-col h-2/3'>
            <p className='sidebarAdmin-text text-black capitalize font-bold text-lg h-9 border-b-[1px] border-[#434343]' >produk</p>
            <a href={'/private/admin/admins/myproducts'} className='sidebarAdmin-text text-black capitalize pl-6 pt-3'>produk saya</a>
            <a href={'/private/admin/admins/myproducts'} className='sidebarAdmin-text text-black capitalize pl-6 pt-3'>produk habis</a>
            <a href={'/private/admin/admins/myproducts'} className='sidebarAdmin-text text-black capitalize pl-6 pt-3'>tambah produk baru</a>
        </div>
    </div>
  )
}

export default Sidebar