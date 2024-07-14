<ul>
    <li>
        <a class="btn btn-util text-white btnAddDeseo" href="#" prod="<?php echo $producto['id']; ?>">
            <i class="fas fa-heart"></i>
        </a>
    </li>
    <li>
        <a class="btn btn-util text-white mt-2" href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
            <!-- Icono correspondiente -->
        </a>
    </li>
    <li>
        <a class="btn btn-util text-white mt-2 btnAddCarrito" href="#" prod="<?php echo $producto['id']; ?>">
            <i class="fas fa-cart-plus"></i>
        </a>
    </li>
</ul>
