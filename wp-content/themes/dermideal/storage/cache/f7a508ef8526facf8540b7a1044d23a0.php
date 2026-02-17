<?php
    $faqSchema = [];

    if (!empty($data['faq'])) {
        foreach ($data['faq'] as $section) {
            if (!empty($section['questions'])) {
                foreach ($section['questions'] as $q) {
                    $faqSchema[] = [
                        '@type' => 'Question',
                        'name' => $q['question'],
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => $q['answer'],
                        ],
                    ];
                }
            }
        }
    }

    if (!empty($faqSchema)) {
        $faqJson = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => $faqSchema
        ];
?>

<script type="application/ld+json">
    <?php echo json_encode($faqJson, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?>

</script>

<?php
    }
?>
<?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/page/faq/ldjson.blade.php ENDPATH**/ ?>