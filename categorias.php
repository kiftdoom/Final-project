<div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
    <ul class="list-unstyled">
        <li>
            <a class="btn btn-util text-white" href="#">
                <i class="fas fa-heart"></i>
            </a>
        </li>
        <li>
            <a class="btn btn-util text-white mt-2" href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                <i class="fas fa-eye"></i>
            </a>
        </li>
        <li>
            <a class="btn btn-util text-white mt-2 btnAddcarrito" href="#" prod="<?php echo $producto['id']; ?>">
                <i class="fas fa-cart-plus"></i>
            </a>
        </li>
    </ul>
</div>
