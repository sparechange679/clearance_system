import { Router } from "express";
import express from "express";
import path from "path";

const pageRouter = Router();

// Serve static files
const __dirname = path.resolve();
pageRouter.use(express.static(path.join(__dirname, "public")));

pageRouter.get("/", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "index.html"));
  });
  
  pageRouter.get("/admin-login", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "admin/login.html"));
  });

  pageRouter.get("/admin-register", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "admin/register.html"));
  });

  pageRouter.get("/admin-dashboard", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "admin/dashboard.html"));
  });

  pageRouter.get("/client-dashboard", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "client/dashboard.html"));
  });

  pageRouter.get("/client-dashboard/add", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "client/add.html"));
  });

  pageRouter.get("/agent-dashboard", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "agent/dashboard.html"));
  });

  pageRouter.get("/keeper-dashboard", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "keeper/dashboard.html"));
  });

  pageRouter.get("/client-register", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "client/register.html"));
  });

  pageRouter.get("/client-login", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "client/login.html"));
  });

  pageRouter.get("/agent-login", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "agent/login.html"));
  });

  pageRouter.get("/keeper-login", (req, res) => {
    res.sendFile(path.join(__dirname, "public", "keeper/login.html"));
  });

export default pageRouter;
