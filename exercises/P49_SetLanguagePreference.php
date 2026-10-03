<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class P49_SetLanguagePreference {
    private array $allowedLanguages = ['en', 'es', 'fr', 'de'];

    public function main(): void {
        // Write your code here
        $lang = $_GET['lang'] ?? 'en';
        if (!in_array($lang, $this->allowedLanguages, true)) {
            $lang = 'en';
        }
        $_SESSION['lang'] = $lang;
        echo "Language set to " . $lang;
    }
}
