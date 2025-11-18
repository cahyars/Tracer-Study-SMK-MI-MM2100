<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Study | SMK Mitra Industri MM2100</title>
</head>
<body>
    <h1>Selamat Datang <b style="color:orange;"><?= $this->session->userdata('nama') ?> 👋</b>,</h1>
    <h2>di Website Tracer Study SMK Mitra Industri MM2100</h2>

    <br>
    
    <?php if ($this->session->userdata('nama')): ?>
        <a href="<?php
        if ($this->session->userdata('role') == 'admin') {
            echo base_url('admin');
        } else {
            echo base_url('alumni');
        }
        ?>">
        <button>Ke Halaman <?= $this->session->userdata('role'); ?></button>
        </a>
        <br>
        <br>
        <a href="<?= base_url('auth/logout') ?>">
            <button>Logout</button>
        </a>
    <?php else: ?>
        <a href="<?= base_url('auth/login') ?>">
            <button>Login Yukk!</button>
        </a>
    <?php endif; ?>
    
</body>
</html>