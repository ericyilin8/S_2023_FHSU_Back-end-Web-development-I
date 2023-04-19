const Employee = require("../model/Employee");

// Get all Employees
const getAllEmployees = async (req, res) => {
  const employees = await Employee.find();
  if (!employees) {
    return res.status(400).json({ message: "No Employees found." });
  }
  res.json(employees);
};

// Create an Employee
const createNewEmployee = async (req, res) => {
  if (!req.body.firstName || !req.body.lastName) {
    return res
      .status(400)
      .json({ message: "First and last names are required." });
  }
  try {
    const result = await Employee.create({
      firstName: req.body.firstName,
      lastName: req.body.lastName,
    });
    res.status(201).json(result);
  } catch (err) {
    console.log(err);
  }
};

// Update an Employee
const updateEmployee = async (req, res) => {
  if (!req.body.id) {
    return res.status(400).json({ message: "Id Parameter is required" });
  }
const employee = await Employee.findOne({_id: req.body.id})

  if (!employee) {
    return res
      .status(400)
      .json({ message: `Employee ${req.body.id} is not found` });
  }

  if (req.body.firstName) employee.firstName = req.body.firstName;
  if (req.body.lastName) employee.lastName = req.body.lastName;

const result = await employee.save();
res.json(result);
};

// Delete an Employee
const deleteEmployee = async (req, res) => {
  if (!req.body.id) {
    return res.status(400).json({ message: "Id Parameter is required" });
  }
const employee = await Employee.findOne({_id: req.body.id})

  if (!employee) {
    return res
      .status(400)
      .json({ message: `Employee ${req.body.id} is not found` });
  }
 const result = employee.deleteOne({_id: req.body.id})
  res.json(result);
};

// Get a Employee
const getEmployee = async (req, res) => {
  if(!req.params.id){return res.status(400).json({message: "Employee Id is required"})}
  const employee = await Employee.findOne({_id: req.params.id})
  if (!employee) {
    return res
      .status(204)
      .json({ message: `No Employee matches Id ${req.params.id}` });
  }
  res.json(employee);
};

module.exports = {
  getAllEmployees,
  updateEmployee,
  createNewEmployee,
  deleteEmployee,
  getEmployee,
};
