import express from "express";
import { Login, Logout, Register } from "../Controllers/AuthController.js";
import { 
    getUsers, 
    getUserById,
    createUser,
    updateUser,
    deleteUser 
} from "../Controllers/UserController.js";


const router = express.Router();

router.get('/users', getUsers);
router.get('/users/:id', getUserById);
router.post('/users/', createUser);
router.patch('/users/:id', updateUser);
router.delete('/users/:id', deleteUser);
router.post('/register', Register);
router.post('/login', Login);
router.delete('/logout', Logout);

export default router;
