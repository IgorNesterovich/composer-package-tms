<?php
    namespace ComposerPackageTms;

    class SimpleText
    {
        private string $text;

        public function __construct(string $text)
        {
            $this->text = $text;
        }

        public function changeText(string $text)
        {
            return $this->text = $text;
        }

        public function addText(string $text)
        {
            return $this->text .= ' ' . $text;
        }

        public function getText()
        {
            echo "<div>$this->text</div>";
        }
    }
?>
