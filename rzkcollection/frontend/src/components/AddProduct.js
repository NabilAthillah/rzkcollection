import React, { useState } from 'react'
import axios from 'axios'
import { useNavigate } from 'react-router-dom'

const AddProduct = () => {
  const [name, setName] = useState("")
  const [desc, setDesc] = useState("")
  const [price, setPrice] = useState("")
  const navigate = useNavigate();

    const setProduct = async(e) =>{
        e.preventDefault();
        try {
            await axios.post('http://localhost:5000/products', {
                name,
                desc,
                price
            });
            navigate('/')
        } catch (error) {
            console.log(error)
        }
    }

    return (
    <div className="columns mt-5 is-centered">
        <div className="column is-half">
            <form onSubmit={setProduct}>
                <div className="field">
                    <label className="label">Name</label>
                    <div className="controll">
                        <input type="text" value={name} onChange={(e) => setName(e.target.value)} placeholder='Name' className="input" />
                    </div>
                </div>
                <div className="field">
                    <label className="label">Desc</label>
                    <div className="controll">
                        <input type="text" placeholder='Desc' className="input" value={desc} onChange={(e) => setDesc(e.target.value)}/>
                    </div>
                </div>
                <div className="field">
                    <label className="label">Price</label>
                    <div className="controll">
                        <input type="text" placeholder='Price' className="input" value={price} onChange={(e) => setPrice(e.target.value)}/>
                    </div>
                </div>
                <div className="field">
                    <button type='submit' className='button is-success'>Save</button>
                </div>
            </form>
        </div>
    </div>
  )
}

export default AddProduct