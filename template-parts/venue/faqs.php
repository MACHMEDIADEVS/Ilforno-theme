<?php
// Obtener el título de la sección
$section_title = get_field('faq_section_title') ?: 'Frequently Asked Questions';
?>

<section id="faqs" class="py-5 text-light">
    <div class="container">
        <h2 class="text-center text-gold fw-bold mb-5">
            <?php echo esc_html($section_title); ?>
        </h2>
        
        <div class="modern-accordion">
            <?php // Comprobar si hay preguntas en el repetidor
            if (have_rows('faq_list')) :
                // Iniciar el bucle para recorrer cada pregunta
                while (have_rows('faq_list')) : the_row();
                    
                    // Obtener los datos de los sub-campos
                    $question = get_sub_field('faq_question');
                    $answer   = get_sub_field('faq_answer');
                    
                    // Generar un ID único para cada elemento del acordeón
                    $faq_id = 'faq-' . get_row_index();
            ?>
                    <div class="accordion-item">
                        <input type="checkbox" id="<?php echo esc_attr($faq_id); ?>" hidden />
                        <label for="<?php echo esc_attr($faq_id); ?>" class="accordion-title">
                            <span><?php echo esc_html($question); ?></span>
                            <i class="fas fa-chevron-down"></i>
                        </label>
                        <div class="accordion-content">
                            <?php echo $answer; // El contenido del WYSIWYG se imprime directamente ?>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                // Mensaje de respaldo si el repetidor está vacío
            ?>
                <p class="text-center">Las preguntas frecuentes se mostrarán aquí.</p>
            <?php endif; ?>
        </div>
    </div>
</section>