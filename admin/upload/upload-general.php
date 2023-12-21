<?php 

if (isset($_POST['submit'])) {
	include "../conn.php";

	$img_name = $_FILES['img_name']['name'];
	$img_size = $_FILES['img_name']['size'];
	$tmp_name = $_FILES['img_name']['tmp_name'];
	$error = $_FILES['img_name']['error'];

    $prod_category = $_POST['category'];
    $prod_name = $_POST['prod_name'];
    $prod_desc= $_POST['prod_desc'];

	if ($error === 0) {
		if ($img_size > 3000000) {
			$em = "Sorry, your file is too large.";
		    header("Location: ../add-general.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png", "webp"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				
                        $img_upload_path = './product_uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				
				$sql = "INSERT INTO general(product,image_url,product_subname,prod_description) VALUES('$prod_category','$new_img_name','$prod_name','$prod_desc')";
                    mysqli_query($conn, $sql);
					$succ = "Prodect uploaded successfully";
					header("Location: ../general.php?success=$succ");
				
                    
			}else {
				$em = "You can't upload files of this type";
				
		        header("Location: ../add-general.php?error=$em");
			}
		}
	}
	else {
		$em = "unknown error occurred!";
		header("Location: ../add-general.php?error=$em");
	}

}else {
	header("Location: ../add-general.php?error-occured");
}
?>