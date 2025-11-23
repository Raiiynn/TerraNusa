// controllers/AuthController.js
import User from "../models/UserModel.js";
import jwt from "jsonwebtoken";

export const Register = async(req, res) => {
    const { name, email, password } = req.body;
    try {
        await User.create({
            name: name,
            email: email,
            password: password
        });
        res.json({msg: "Register Berhasil"});
    } catch (error) {
        console.log(error);
        res.status(400).json({msg: "Email sudah terdaftar"});
    }
}

export const Login = async(req, res) => {
    try {
        const user = await User.findOne({
            where: {
                email: req.body.email,
                password: req.body.password
            }
        });
        if(!user) return res.status(400).json({msg: "Email atau Password Salah"});
        
        const userId = user.id;
        const name = user.name;
        const email = user.email;
        
        const accessToken = jwt.sign({userId, name, email}, process.env.ACCESS_TOKEN_SECRET, {
            expiresIn: '1d'
        });
        
        res.json({ accessToken });
    } catch (error) {
        res.status(404).json({msg:"Email tidak ditemukan"});
    }
}

export const Logout = async(req, res) => {
    res.json({msg: "Berhasil Logout"});
}