import React, { useState, useEffect } from 'react'
import axios from 'axios'
import { useNavigate, useParams } from 'react-router-dom'

const EditProduct = () => {
  const [name, setName] = useState("")
  const [desc, setDesc] = useState("")
  const [price, setPrice] = useState("")
  const navigate = useNavigate();
  const { id } = useParams();

  useEffect(() => {
    getProductById()
  },[])

    const updateProduct = async(e) =>{
        e.preventDefault();
        try {
            await axios.patch(`http://localhost:5000/products/${id}`, {
                name,
                desc,
                price
            });
            navigate('/')
        } catch (error) {
            console.log(error)
        }
    }

    const getProductById = async() => {
        const response = await axios.get(`http://localhost:5000/products/${id}`)
        setName(response.data.name)
        setDesc(response.data.desc)
        setPrice(response.data.price)
    }

    return (
    <div className="columns mt-5 is-centered">
        <div className="column is-half">
            <form onSubmit={updateProduct}>
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
                    <button type='submit' className='button is-success'>Update</button>
                </div>
            </form>
        </div>
    </div>
  )
}

export default EditProduct