<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* Form container design */
    .form-container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        font-size: 16px;
        color: #555;
        margin-bottom: 8px;
        display: block;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-top: 5px;
    }

    .form-control:focus {
        border-color: #007BFF;
        outline: none;
    }

    .btn {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary {
        background-color: #007BFF;
        color: white;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: white;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    /* Responsive design for smaller screens */
    @media (max-width: 768px) {
        .form-container {
            padding: 20px;
        }
    }
</style>
</head>
<body>
<?= $this->extend('admin/layout'); ?>

<?= $this->section('content'); ?>

<h2>Kullanıcıyı Düzenle</h2>

<form action="<?= site_url('admin/updateUser/'.$user['id']); ?>" method="POST" class="form-container">
    <?= csrf_field(); ?>

    <div class="form-group">
        <label for="name">Kullanıcı Adı</label>
        <input type="text" name="kullaniciadi" class="form-control" value="<?= old('kullaniciadi', $user['kullaniciadi']); ?>" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="<?= old('email', $user['email']); ?>" required>
    </div>

    <div class="form-group">
        <label for="password">Şifre</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Güncelle</button>
        <a href="<?= site_url('admin/user_list'); ?>" class="btn btn-secondary">Geri</a>
    </div>
</form>

<?= $this->endSection(); ?>



</body>
</html>