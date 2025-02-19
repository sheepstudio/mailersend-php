<?php

namespace MailerSend\Helpers\Builder;

class EmailParams
{
    protected ?string $from = null;
    protected ?string $from_name = null;
    protected ?string $reply_to = null;
    protected ?string $reply_to_name = null;
    protected ?array $recipients;
    protected ?string $subject = null;
    protected ?string $html = null;
    protected ?string $text = null;
    protected ?string $template_id = null;
    protected array $tags = [];
    protected array $variables = [];
    protected array $attachments = [];
    protected array $personalizations = [];

    public function getFrom(): ?string
    {
        return $this->from;
    }

    public function setFrom(string $from): EmailParams
    {
        $this->from = $from;
        return $this;
    }

    public function getFromName(): ?string
    {
        return $this->from_name;
    }

    public function setFromName(string $from_name): EmailParams
    {
        $this->from_name = $from_name;
        return $this;
    }

    public function getReplyTo(): ?string
    {
        return $this->reply_to;
    }

    public function setReplyTo(string $reply_to): EmailParams
    {
        $this->reply_to = $reply_to;
        return $this;
    }

    public function getReplyToName(): ?string
    {
        return $this->reply_to_name;
    }

    public function setReplyToName(string $reply_to_name): EmailParams
    {
        $this->reply_to_name = $reply_to_name;
        return $this;
    }

    public function getRecipients(): array
    {
        return $this->recipients;
    }

    public function setRecipients(array $recipients): EmailParams
    {
        $this->recipients = $recipients;
        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): EmailParams
    {
        $this->subject = $subject;
        return $this;
    }

    public function getHtml(): ?string
    {
        return $this->html;
    }

    public function setHtml(?string $html): EmailParams
    {
        $this->html = $html;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): EmailParams
    {
        $this->text = $text;
        return $this;
    }

    public function getTemplateId(): ?string
    {
        return $this->template_id;
    }

    public function setTemplateId(?string $template_id): EmailParams
    {
        $this->template_id = $template_id;
        return $this;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(array $tags): EmailParams
    {
        $this->tags = $tags;
        return $this;
    }

    public function getVariables(): array
    {
        return $this->variables;
    }

    public function setVariables(array $variables): EmailParams
    {
        $this->variables = $variables;
        return $this;
    }

    public function getAttachments(): array
    {
        return $this->attachments;
    }

    public function setAttachments(array $attachments): EmailParams
    {
        $this->attachments = $attachments;
        return $this;
    }

    public function getPersonalizations(): array
    {
        return $this->personalizations;
    }

    public function setPersonalizations(array $personalizations): EmailParams
    {
        $this->personalizations = $personalizations;
        return $this;
    }

}
