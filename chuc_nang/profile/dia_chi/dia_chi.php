<?php
    if(!isset($bien_bao_mat)){exit();}
?>
<?php
    $id_user = $_SESSION['id_user'];
    $tv = "SELECT * FROM dia_chi WHERE id_user='$id_user' ORDER BY id";
    $tv_1 = mysqli_query($conn, $tv);
    $row_count = mysqli_num_rows($tv_1);
?>

<?php if($row_count > 0): ?>
    <form action="" method="post">
        <table>
            <tr class="tr_title">
                <td style="width:70%"> 
                    <b>Địa chỉ</b>
                </td>
                <td style="text-align:center;">
                    <b>Mặc định</b>
                </td>
            </tr>
            <?php while($tv_2=mysqli_fetch_array($tv_1)):
    $tinh=$tv_2['tinh'];
    $huyen=$tv_2['huyen'];
    $xa=$tv_2['xa'];
    $duong=$tv_2['duong'];
    $so_nha=$tv_2['so_nha'];
    $mac_dinh=$tv_2['mac_dinh'];
    $checked = ($mac_dinh == "co") ? "checked" : "";
?>
<tr>
    <td width="70%"><?php echo $so_nha.' '.$duong.', '.$xa.', '.$huyen.', '.$tinh.' ' ?>
        <?php
            if($mac_dinh=="co")
            {
                echo'(Mặc định)';                                
            }
        ?>
    </td>
    <td style="text-align:center;">
    <input type="radio" name="dia_chi_id" value="<?php echo $tv_2['id']; ?>" <?php if($mac_dinh == "co"){echo 'checked';}?>>

    </td>
</tr>
<?php endwhile; ?>
            <tr>
                <td style="text-align:center">
                <input type="button" value="Thêm địa chỉ" onclick="location.href='?thamso=profile&dieu_huong=them_dia_chi'">
                </td>
            </tr>
            <tr>
                <td colspan=2 style="text-align:center">
                    <input type="submit" name="dat_mac_dinh_dia_chi" value="Đặt làm mặc định">
                </td>
            </tr>
        </table>
    </form>
    <?php
   if(isset($_POST['dat_mac_dinh_dia_chi'])) { 
    if(isset($_POST['dia_chi_id'])) {
        $dia_chi_id = $_POST['dia_chi_id'];
        $sql = "UPDATE dia_chi SET mac_dinh = 'co' WHERE id = '$dia_chi_id' and id_user='$id_user'";
        $sql2="UPDATE dia_chi SET mac_dinh = 'khong' WHERE id != '$dia_chi_id' and id_user='$id_user'";
        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);
        thong_bao('Cập nhật địa chỉ mặc định thành công');
    }
    else {
        echo 'Bạn chưa chọn địa chỉ mặc định';
    }
}

?>
<?php else: ?>
    <p>Không có địa chỉ</p>
    <button class="add" onclick="location.href='?thamso=profile&dieu_huong=them_dia_chi'" >Thêm địa chỉ</button>
<?php endif; ?>
