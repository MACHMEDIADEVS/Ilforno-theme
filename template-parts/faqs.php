<?php
$faq_title = get_field('title_faq');
?>

<style>
    #faqs {
        background-color: #0f0f0f;
    }
    .modern-accordion {
        max-width: 900px;
        margin: 0 auto;
    }
    .accordion-item {
        background: #121212;
        border-left: 4px solid var(--primary);
        margin-bottom: 1.25rem;
        border-radius: 6px;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    .accordion-title {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 1.2rem;
        background-color: #1a1a1a;
        color: var(--primary);
        font-weight: bold;
        font-size: 1rem;
        cursor: pointer;
        position: relative;
    }
    .accordion-title i {
        transition: transform 0.3s ease;
    }
    .accordion-item input:checked+.accordion-title i {
        transform: rotate(180deg);
    }
    .accordion-content {
        max-height: 0;
        overflow: hidden;
        background-color: #191919;
        color: var(--light-cream);
        font-size: 0.95rem;
        padding: 0 1.2rem;
        transition: max-height 0.4s ease, padding 0.4s ease;
    }
    .accordion-item input:checked~.accordion-content {
        max-height: 500px;
        padding: 1rem 1.2rem;
    }
</style>

<?php if ($faq_title) : ?>
    <section id="faqs" class="py-5">
        <div class="container">
            <h2 class="text-center text-gold fw-bold mb-5">
                <?php echo esc_html($faq_title); ?>
            </h2>

            <div class="modern-accordion">
                <?php if (have_rows('section-faq')) :
                    while (have_rows('section-faq')) : the_row();
                        $question = get_sub_field('question');
                        $answer   = get_sub_field('answer');
                        $faq_id   = 'faq-' . get_row_index();
                ?>
                        <div class="accordion-item">
                            <input type="checkbox" id="<?php echo esc_attr($faq_id); ?>" hidden />
                            <label for="<?php echo esc_attr($faq_id); ?>" class="accordion-title">
                                <span><?php echo esc_html($question); ?></span>
                                <i class="fas fa-chevron-down"></i>
                            </label>
                            <div class="accordion-content">
                                <?php echo nl2br(esc_html($answer)); ?>
                            </div>
                        </div>
                    <?php
                    endwhile;
                else :
                    ?>
                    <p class="text-center">No FAQs found.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>