<?php 

if (isset($_POST['submit'])) {
	include "../conn.php";

	$img_name = $_FILES['img_name']['name'];
	$img_size = $_FILES['img_name']['size'];
	$tmp_name = $_FILES['img_name']['tmp_name'];
	$error = $_FILES['img_name']['error'];

    $prod_category = $_POST['category'];
	
	if ($error === 0) {
		if ($img_size > 2000000) {
		// 	$em = "Sorry, your file is too large.";
		//     header("Location: ../add-gallery.php?error=$em");

		    echo '<script>
		    alert("Sorry, your file is too large.Try uploading a file that is under 2MB size");
		    window.location.href = "../add-gallery.php"; 
		     </script>';
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png", "webp"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				
                        $img_upload_path = './gallery_uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				
				$sql = "INSERT INTO gallery(image_url,category) VALUES('$new_img_name','$prod_category')";
                    mysqli_query($conn, $sql);
						$em = "Image uploaded successfully!";
		        header("Location: ../gallery-list.php?$em");

					// echo '<script>
					// confirm("Image uploaded successfully!");
					// window.location.href = "../gallery-list.php"; 
					//  </script>';
                    
			}else {
			// 	$em = "You can't upload files of this type";
		      //   header("Location: ../add-gallery.php?error=$em");
			  echo '<script>
			  alert("You cant upload files of this type!");
			  window.location.href = "../add-gallery.php"; 
			   </script>';
			}
		}
	}
	else {
		echo '<script>
		alert("unknown error occurred!");
		window.location.href = "../add-gallery.php"; 
	 	</script>';
	}

}else {
	// header("Location: ../add-gallery.php?error-occured");
	echo '<script>
		alert("error occurred!");
		window.location.href = "../add-gallery.php"; 
	 	</script>';
}
?>