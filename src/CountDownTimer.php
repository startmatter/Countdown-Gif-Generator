<?php

namespace startmatter\CountdownClock;

class CountDownTimer implements ClockInterface {

    protected $dateTime;
    protected $timezone;
    protected $backgroundImageFile;
    protected $fontFile;  

    public function __construct($dateTime, $timezone = 'America/Los_Angeles', $backgroundImageFile = 'countDownWgiteBG.png', $fontFile = 'Lato-Bold.ttf') {
        $this->dateTime = \DateTime::createFromFormat('Y-m-d H:i:s', $dateTime);
        $this->timezone = $timezone;
        $this->backgroundImageFile = __DIR__ . DIRECTORY_SEPARATOR . $backgroundImageFile;
        $this->fontFile = __DIR__ . DIRECTORY_SEPARATOR . $fontFile; 
    }
    /**
     * @return string clock name
     */
    public function getName() {
        return "Count Down Timer";
    }
    /**
     * @return /DateTime deadline date and time
     */
    public function getdeadlineDateTime() {
        return $this->dateTime; 
    }
    /**
     * @return string time zone
     */
    public function getTimezone() {
        return $this->timezone;
    }
    /**
     * @return string symbol between countdown date elements
     */
    public function getSeparator() {
        return " ";
    }
    /**
     * @return integer spacing between symbol between countdown date elements
     */
    public function getSeparatorSpacing() {
        return 3;
    }
    /**
     * @return integer length of days countdown date element
     */
    public function getDaysLen() {
        return 2;
    }
    /**
     * @return integer spacing between characters
     */
    public function getSpacing() {
        return 0;
    }
    /**
     * @return string font file path
     */
    public function getFontFilePath() {
        return $this->fontFile;
    }
    /**
     * @return integer size of font
     */
    public function getFontsize() {
        return 14;
    }
    /**
     * @return integer font start x
     */
    public function getFontx() {
        return 10;
    }
    /**
     * @return integer font start y
     */
    public function getFonty() {
        return $this->getFontsize() + 3;
    }
    /**
     * @return integer font red
     */
    public function getFontr() {
        return 111;
    }
    /**
     * @return integer font green
     */
    public function getFontg() {
        return 111;
    }
    /**
     * @return integer font blue
     */
    public function getFontb() {
        return 111;
    }
    /**
     * @return integer font angle
     */
    public function getFontangle() {
        return 0;
    }
    /**
     * @return string background image file path
     */
    public function getBackgroundImageFilePath() {
        return $this->backgroundImageFile;
    }
    /**
     * @return array [r, g, b] [255, 255, 255] integer array if getBackgroundImageFilePath returns false
     *
     */
    public function getBackgroundImageColor() {
        return false;
    }
}
