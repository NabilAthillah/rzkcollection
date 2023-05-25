import React from 'react'
import Navbar from '../components/Navbar'
import Sidebar from '../components/Sidebar'
import '../style/styleadmin.css'

const Homeadmin = () => {
  return (
      <div className='flex justify-end'>
        <Navbar />
        <Sidebar />
        <main id='myOrdersAdmin' className='border-[1px] border-[#848992] border-t-0 p-20 overflow-y-auto'>
            <article>
                <div className='box w-11/12 border-[1px] border-[#848992] mb-5 p-5 flex' id='boxOrder'>
                    <div className='box-left max-w-full pr-5'>
                        <img src={'/GRS03747.jpeg'} className=' w-20'/>
                    </div>
                    <div className='box-right flex start w-full'>
                        <div className='flex h-full flex-col justify-around capitalize font-[Lora] w-full text-center'>
                            <p>no order</p>
                            <div className='w-full border-[0.5px] border-black'></div>
                            <p>270000001</p>
                        </div>
                        <div className='flex h-full flex-col justify-around capitalize font-[Lora] w-full text-center'>
                            <p>date</p>
                            <div className='w-full border-[0.5px] border-black'></div>
                            <p>10/12/2022</p>
                        </div>
                        <div className='flex h-full flex-col justify-around capitalize font-[Lora] w-full text-center'>
                            <p>ship to</p>
                            <div className='w-full border-[0.5px] border-black'></div>
                            <p>dhefika</p>
                        </div>
                        <div className='flex h-full flex-col justify-around capitalize font-[Lora] w-full text-center'>
                            <p>order total</p>
                            <div className='w-full border-[0.5px] border-black'></div>
                            <p>Rp. 578.000,00</p>
                        </div>
                        <div className='flex h-full flex-col justify-around capitalize font-[Lora] w-full text-center'>
                            <p>status</p>
                            <div className='w-full border-[0.5px] border-black'></div>
                            <p>processing</p>
                        </div>
                    </div>
                </div>
                <div className='box w-11/12 border-[1px] border-[#848992] mb-5 p-5 flex' id='boxOrder'>
                    <div className='box-left max-h-full'>
                        <img src={'/GRS03747.jpeg'} className=' w-20'/>
                    </div>
                    <div className='box-right flex start w-full'>
                        <div className='flex h-full flex-col justify-around capitalize font-[Lora] w-full text-center'>
                            <p>no order</p>
                            <div className='w-full border-[0.5px] border-black'></div>
                            <p>270000001</p>
                        </div>
                        <div className='flex h-full flex-col justify-around capitalize font-[Lora] w-full text-center'>
                            <p>date</p>
                            <div className='w-full border-[0.5px] border-black'></div>
                            <p>10/12/2022</p>
                        </div>
                        <div className='flex h-full flex-col justify-around capitalize font-[Lora] w-full text-center'>
                            <p>ship to</p>
                            <div className='w-full border-[0.5px] border-black'></div>
                            <p>dhefika</p>
                        </div>
                        <div className='flex h-full flex-col justify-around capitalize font-[Lora] w-full text-center'>
                            <p>order total</p>
                            <div className='w-full border-[0.5px] border-black'></div>
                            <p>Rp. 578.000,00</p>
                        </div>
                        <div className='flex h-full flex-col justify-around capitalize font-[Lora] w-full text-center'>
                            <p>status</p>
                            <div className='w-full border-[0.5px] border-black'></div>
                            <p>processing</p>
                        </div>
                    </div>
                </div>
            </article>
        </main>
    </div>
  )
}

export default Homeadmin