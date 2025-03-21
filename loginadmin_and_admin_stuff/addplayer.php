<?php session_start();?>
<?php include '../layout/header.php'?>
<?php if (!isset($_SESSION['Role'])||$_SESSION['Role']!=="admin") {
    header("location:login.php");
    exit();
}
?>
<style>
    .container{
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-direction: row-reverse;
    }
    .form-left{
        text-align: center;
        width: 100%;
        padding-left: 250px;
        align-items: center;
    
        
    }
    .form-right{
        width: 40%;
       padding-right: 350px;
    }
    button{
    align-self: flex-end;
    }
    .avatar {
    width: 150px;
    height: 150px;
    object-fit: cover;
    cursor: pointer;
    border: 2px solid #ccc;
}

input[type="file"] {
    display: none;
}
</style>
<body>
<h1>Thêm cầu thủ mới</h1>
<form><div class="container">
    <div class="form-right">
<div class="mb-3">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Tên cầu thủ">
</div>
<div class="mb-3">
    <label for="Date">Ngày sinh</label>
    <input type="Date" name="date">
</div>
<div>
    <label for="form-label">Quốc gia</label>
    <input type="text" name="country" placeholder="Đất Nước">
</div>
<div class="mb-3">
    <label for="height">Chiều cao</label>
    <input type="text" name="height" placeholder="Chiều cao">
</div>
<button type="submit">Lưu thông tin</button>
</div>
<div class="form-left">
<div class="mb-3">
    <label for="avarta-upload">Ảnh Đại Diện</label>
    <img id="avatar-preview" class="avatar" src="default-avatar.png">
    <input type="file" name="avatar" id="avatar-upload" accept="image/*" hidden>
</div>
</div>
</div>

</form>
</body>
<script>
    document.getElementById('avatar-preview').addEventListener('click',function(){
        document.getElementById('avatar-upload').click();
    });
    document.getElementById('avatar-upload').addEventListener('change',function(event){
        const file=event.target.files[0]
        if (file) {
            const reader=new FileReader();
            reader.onload=function(){
                document.getElementById('avatar-preview').src=reader.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>


<?php include '../layout/footer.php'?>

