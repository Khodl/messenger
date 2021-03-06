<?php
namespace Kerox\Messenger\Test\TestCase\Model\Message\Attachment;

use Kerox\Messenger\Model\Message\Attachment\Audio;
use Kerox\Messenger\Model\Message\Attachment\File;
use Kerox\Messenger\Model\Message\Attachment\Image;
use Kerox\Messenger\Model\Message\Attachment\Video;
use Kerox\Messenger\Test\TestCase\AbstractTestCase;

class FileTest extends AbstractTestCase
{

    public function testFile()
    {
        $expectedJson = file_get_contents(__DIR__ . '/../../../../Mocks/Message/Template/file.json');
        $file = new File('https://petersapparel.com/bin/receipt.pdf', true);

        $this->assertJsonStringEqualsJsonString($expectedJson, json_encode($file));
    }

    public function testAudio()
    {
        $expectedJson = file_get_contents(__DIR__ . '/../../../../Mocks/Message/Template/audio.json');
        $audio = new Audio('https://petersapparel.com/bin/clip.mp3');

        $this->assertJsonStringEqualsJsonString($expectedJson, json_encode($audio));
    }

    public function testVideo()
    {
        $expectedJson = file_get_contents(__DIR__ . '/../../../../Mocks/Message/Template/video.json');
        $video = new Video('https://petersapparel.com/bin/clip.mp4');

        $this->assertJsonStringEqualsJsonString($expectedJson, json_encode($video));
    }

    public function testImage()
    {
        $expectedJson = file_get_contents(__DIR__ . '/../../../../Mocks/Message/Template/image.json');
        $video = new Image('https://petersapparel.com/img/shirt.png');

        $this->assertJsonStringEqualsJsonString($expectedJson, json_encode($video));
    }

    public function testFileWithAttachmentId()
    {
        $expectedJson = file_get_contents(__DIR__ . '/../../../../Mocks/Message/Template/file_attachment.json');
        $file = new File('1745504518999123');

        $this->assertJsonStringEqualsJsonString($expectedJson, json_encode($file));
    }
}