<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat\Messages;

/**
 * Class Voice.
 *
 * @property string $media_id
 */
class Voice extends Message
{
    /**
     * Messages type.
     *
     * @var string
     */
    protected $type = 'voice';

    /**
     * Properties.
     *
     * @var array
     */
    protected $properties = [
        'media_id',
        'recognition',
    ];

    /**
     * Set media id.
     *
     * @param string $mediaId
     *
     * @return Voice
     */
    public function media($mediaId)
    {
        $this->setAttribute('media_id', $mediaId);

        return $this;
    }
}