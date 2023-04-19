const mongoose = require('mongoose');

const connectDB = async () =>{
    try {
        await mongoose.connect("mongodb+srv://jhonedoe:qazwsx123@cluster0.eoegzrn.mongodb.net/?retryWrites=true&w=majority", 
        {
            useUnifiedTopology: true,
            useNewUrlParser: true
        }
        )
    }
    catch(err){
        console.log(err)
    }
}

module.exports = connectDB;