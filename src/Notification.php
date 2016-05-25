<?php
namespace paragraph1\phpFCM;

class Notification extends Message
{
	private $title;
	private $body;
	private $badge;

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }


    public function setBadge($badge)
    {
        $this->badge = $badge;
        return $this;
    }

    public function toJson()
    {
        $json = array(
            'title' => $this->title,
            'body' => $this->body
        );
        if ($this->badge) {
            $json['badge'] = $this->badge;
        }

        return json_encode($json);
    }
}