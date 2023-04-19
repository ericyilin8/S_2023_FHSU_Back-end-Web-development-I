const mongoose = require("mongoose");

const connectDB = async () => {
  try {
    await mongoose.connect(
      "mongodb+srv://new_user19:1qaz2wsx@cluster0.eoegzrn.mongodb.net/?retryWrites=true&w=majority",
      {
        useUnifiedTopology: true,
        useNewUrlParser: true,
      }
    );
  } catch (error) {
    console.log(error);
  }
};

module.exports = connectDB;
