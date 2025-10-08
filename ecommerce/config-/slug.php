<?php

function generateSlug($title, $connection) {
    // Convert title to slug
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title)));
    $originalSlug = $slug;
    $counter = 1;

    // Check if slug exists
    $query = "SELECT COUNT(*) FROM articles WHERE slug = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $slug);
    $stmt->execute();
    $stmt->bind_result($counter);
    $stmt->fetch();
    $stmt->close();

    // If slug exists, append a number to make it unique
    while ($counter > 0) {
        $slug = $originalSlug . '-' . $counter;
        $counter++;

        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $slug);
        $stmt->execute();
        $stmt->bind_result($counter);
        $stmt->fetch();
        $stmt->close();
    }

    return $slug;
}

?>