<?php

namespace Kerox\Messenger\Model\Callback;

class Postback
{
    /**
     * @var string
     */
    protected $payload;

    /**
     * @var null|\Kerox\Messenger\Model\Callback\Referral
     */
    protected $referral;

    /**
     * Postback constructor.
     *
     * @param string                                   $payload
     * @param \Kerox\Messenger\Model\Callback\Referral $referral
     */
    public function __construct(string $payload, Referral $referral = null)
    {
        $this->payload = $payload;
        $this->referral = $referral;
    }

    /**
     * @return string
     */
    public function getPayload(): string
    {
        return $this->payload;
    }

    /**
     * @return bool
     */
    public function hasReferral(): bool
    {
        return $this->referral !== null;
    }

    /**
     * @return null|\Kerox\Messenger\Model\Callback\Referral
     */
    public function getReferral()
    {
        return $this->referral;
    }

    /**
     * @param array $payload
     *
     * @return \Kerox\Messenger\Model\Callback\Postback
     */
    public static function create(array $payload): Postback
    {
        $referral = isset($payload['referral']) ? Referral::create($payload['referral']) : null;

        return new static($payload['payload'], $referral);
    }
}
