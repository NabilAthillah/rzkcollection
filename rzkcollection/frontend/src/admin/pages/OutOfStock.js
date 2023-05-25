import React from 'react'
import Navbar from '../components/Navbar'
import Sidebar from '../components/Sidebar'
import '../style/styleadmin.css'

const OutOfStock = () => {
  return (
    <div className='flex justify-end'>
        <Navbar />
        <Sidebar />
        <main id='myProducts' className='border-[1px] border-[#848992] border-t-0 pb-10 overflow-x-auto'>
            <header>
                <p className='font-[Lora] text-black capitalize font-bold text-lg h-9 border-b-[1px] border-[#434343] pl-10'>habis</p>
            </header>
            <div className='font-[Lora] flex ml-20 capitalize w-full text-center'>
                <p className='w-[15%]'>produk</p>
                <p className='w-[25%]'>variasi</p>
                <p className='w-[15%]'>harga</p>
                <p className='w-[15%]'>stok</p>
                <p className='w-[15%]' >aksi</p>
            </div>
            <div id='myProductsdetail' className='w-full border-2 p-10'>
                <div className='box w-full h-1/2 border-2 flex justify-start'>
                    <div className='produk w-[23%] flex flex-col justify-center items-center h-full'>
                        <img src={'/GRS03747.jpeg'} className='w-20'/>
                        <p className='font-[Lora] capitalize font-bold text-center'>therary</p>
                    </div>
                    <div className='variasi flex w-[20%] justify-between'>
                        <div className='text-start'>
                            <p className='capitalize pb-2'>black</p>
                        </div>
                        <div className='text-end'>
                            <p className='capitalize pb-2'>all size</p>
                        </div>
                    </div>
                    <div className='harga font-[Lora] w-[16%] text-end pr-5'>
                        <p className='pb-2'>Rp. 52.500</p>
                    </div>
                    <div className='stok font-[Lora] w-[14%] text-end pr-5'>
                        <p className='pb-2'>27</p>
                    </div>
                    <div className=' w-[27%]'>
                        <div className='aksi font-[Lora] pl-2 flex justify-evenly pb-2'>
                            <button>Hapus</button>
                            <button>Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
  )
}

export default OutOfStock