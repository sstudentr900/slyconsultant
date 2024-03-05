<?php
namespace App\customFn;

class CustomFn
{
    static function imgAdd( $image,$customImgName){
        $imgName =  $customImgName.time().'.jpg';
        $path = 'img/'.$imgName;//圖片路徑
        file_put_contents($path, base64_decode(str_replace('data:image/jpeg;base64,','', $image)));//返回的是字节数
        return $imgName;
    }
    static function imgUpdata($image,$data,$customImgName){
        if($data->cover!=$image){
            $path = 'img/'.$data->cover;//圖片路徑
            //圖片名為error.jpg或路徑不存在
            if($image=='error.jpg' || !file_exists($path)){
              return self::imgAdd($image,$customImgName);
            }else{
              file_put_contents($path, base64_decode(str_replace('data:image/jpeg;base64,','', $image)));//返回的是字节数
              return '';
            }
        }
    }
    static function imgDelet($data){
        if($data->cover !='error.jpg'){
            $imgName = 'img/'.($data->cover);
            if(file_exists($imgName) && is_file($imgName)){
                unlink($imgName);
            }
        }
    }
    static function customSearch($count,$end,$p){
        $pageTotle = ceil($count / $end);
        $pageP = $p;
        if($p>$pageTotle){
            $pageP = $pageTotle;
        }else if($p<1){
            $pageP = 1;
        }
        $start = ($pageP - 1) * $end;
        return ['pageStare'=>$pageP,'pageTotle'=> $pageTotle,'startValue'=> $start,'endValue'=> $end];
        // $this->binding['pageStare'] = $pageP;
        // $this->binding['pageTotle'] = $pageTotle;
        // $this->binding['startValue'] = $start;
        // $this->binding['endValue'] = $end;
    }
}
?>