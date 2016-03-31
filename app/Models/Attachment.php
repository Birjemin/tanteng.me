<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Attachment extends Eloquent
{
    protected $table = 'attachment';

    protected $fillable = [
        'key',
        'url',
        'type',
        'size'
    ];

    protected $appends = [
        'size',
        'is_img'
    ];

    //ý���ļ��б�
    public function attachmentList()
    {
        return $this->orderBy('updated_at','desc')->paginate(15);
    }

    //�ļ���С
    public function getSizeAttribute()
    {
        return $this->formatBytes($this->attributes['size']);
    }

    //�ж��ļ��Ƿ���ͼƬ
    public function getIsImgAttribute()
    {
        list($tp,) = explode('/', $this->attributes['type']);
        if ($tp == 'image') {
            return true;
        }
        return false;
    }

    //�ļ���С��λת��
    private function formatBytes($size)
    {
        $units = array(' B', ' KB', ' MB', ' GB', ' TB');
        for ($i = 0; $size >= 1024 && $i < 4; $i++) $size /= 1024;
        return round($size, 2) . $units[$i];
    }
}
