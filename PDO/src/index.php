<?php
    require_once('Products.php');

    use App\Products;

    $produto = new Products();

    switch($_GET['operation']) {
        case 'show':
            echo '<h3>Products: </h3>';

            foreach($produto->show() as $value) {
                echo 'Id: ' . $value['id'] . ' <br> Descrição: ' . $value['descricao'] . '<hr>';
            }

            break;
        case 'insert':
            $status = $produto->insert('Product lesguiiiiriririririrr');

            if($status) {
                echo 'Product succesfully inserted';
            } else {
                echo 'Product not inserted';
            }
            break;
        case 'update':
            try {
                $status = $produto->update('Product lesguirrrrrrrriiiiiiii.', 5);

                if($status) {
                    echo 'Product succesfully updated';
                } else {
                    echo 'Failed to update product.';
                }
            } catch (Exception $e) {
                echo 'ERROR MESSAGE:: ' . $e->getMessage();
            }
            break;
        case 'delete':
            try {
                $status = $produto->delete(5);

                if($status) {
                    echo 'Product succesfully removed';
                } else {
                    echo 'Failed to remove product.';
                }
            } catch (Exception $e) {
                echo 'ERROR MESSAGE:: ' . $e->getMessage();
            }
            break;
        default:
            echo 'Opeção Inválida....';
            break;
    }