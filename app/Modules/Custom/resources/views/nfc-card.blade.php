@extends('custom::layouts.master')
@section('content')
<style>
    img {
    max-width:366px;
    max-height:216px;
    }
    .card1 {
    width: 366px;         
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds/Back.jpg") no-repeat;
    display: inline-block;
    background-size: cover;
    }
    .card1:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .card2 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds1/Front.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .card2:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds1/Back.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .card3 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds2/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .card3:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds2/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .card4 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds3/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .card4:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds3/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .card5 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds4/Front.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .card5:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds4/Back.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .card6 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds5/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .card6:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds5/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .card7 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds6/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .card7:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds6/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .card8 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds7/Front.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .card8:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds7/Back.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .card9 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds8/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .card9:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Horizontal/virtual-backgrounds8/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .cardv1 {
    width: 216px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 366px;
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .cardv1:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .cardv2 {
    width: 216px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 366px;
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds1/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .cardv2:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds1/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .cardv3 {
    width: 216px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 366px;
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds2/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .cardv3:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds2/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .cardv4 {
    width: 216px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 366px;
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds3/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .cardv4:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds3/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .cardv5 {
    width: 216px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 366px;
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds4/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .cardv5:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds4/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .cardv6 {
    width: 216px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 366px;
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds5/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .cardv6:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds5/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .cardv7 {
    width: 216px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 366px;
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds6/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .cardv7:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds6/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .cardv8 {
    width: 216px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 366px;
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds7/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .cardv8:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds7/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .cardv9 {
    width: 216px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 366px;
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds8/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .cardv9:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds8/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .cardv10 {
    width: 216px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 366px;
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds9/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .cardv10:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds9/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .cardv11 {
    width: 216px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 366px;
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds10/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .cardv11:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds10/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .cardv12 {
    width: 216px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 366px;
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds11/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .cardv12:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds11/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .cardv13 {
    width: 216px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 366px;
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds12/Back.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .cardv13:hover {
    background: url("assets/assets-home/NFC-Backgrounds/Vertical/virtual-backgrounds12/Front.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai1 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai1.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai1:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai2.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai2 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai2.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai2:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai2.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai3 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai3.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai3:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai3.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai4 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai4.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai4:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai4.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai5 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai5.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai5:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai5.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai6 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai6.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai6:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai6.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai7 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai7.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai7:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai7.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai8 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai8.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai8:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai8.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai9 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai9.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai9:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai9.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai10 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai10.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai10:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai10.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai11 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai11.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai11:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai11.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai12 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai12.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai12:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai12.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai13 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai13.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai13:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai13.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai14 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai14.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai14:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai14.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai15 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai15.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai15:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai15.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai16 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai16.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai16:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai16.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai17 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai17.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai17:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai17.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai18 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai18.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai18:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai18.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai19 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai19.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai19:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai19.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai20 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai20.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai20:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai20.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai21 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai21.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai21:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai21.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai22 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai22.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai22:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai22.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai23 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai23.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai23:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai23.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai24 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai24.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai24:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai24.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai25 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai25.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai25:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai25.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai26 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai26.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai26:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai26.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai27 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai27.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai27:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai27.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai28 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai28.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai28:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai28.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai29 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai29.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai29:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai29.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    .ai30 {
    width: 366px;
    margin-right:30px;
    margin-left:30px;
    margin-top:30px;
    height: 216px;
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai30.jpg");
    display: inline-block;
    background-size: cover;
    loading: lazy;
    }
    .ai30:hover {
    background: url("assets/assets-home/NFC-Backgrounds/ai-qr/ai30.jpg") no-repeat;
    background-size: cover;
    loading: lazy;
    }
    figure {
    text-align: center;
    }
    figcaption {
    margin-top: 10px;
    font-size:16px;
    font-weight: bold;
    color:#0CAF60;
    }
    figcaption:hover{
    margin-top: 10px;
    font-weight: bold;
    color:#AEF238;
    }
    .vsamll{
    font-size:12px;
    }
    .image{
    margin-top:30px;
    justify-content: center;
    display: flex;
    flex-wrap: wrap;
    }
    .bis-project-feed-btn {
    text-align: center;
    color: white;
    width: 100%;
    display:block;
    }
    .bis-portfolio-tab-btn {
    display: inline-block;
    color: white;
    margin-bottom: 20px; /* Adjust margin-bottom for spacing */
    }
    .filter-button {
    color: white !important;
    /* ... (other styles) ... */
    }
    .filter-button:checked {
    background-color: #0caf60 !important; /* Your desired color */
    }
</style>
 <!-- End of header section
    ============================================= -->
 <!-- Start of breadcurmb section
    =============================================  -->
 <section id="VCARDe-breadcurmb" class="VCARDe-breadcurmb-section">
    <div class="containers">
       <div class="breadcurmb-title text-center">
          <h2>Buy NFC</h2>
       </div>
    </div>
 </section>
 <!-- End of breadcurmb section
    ============================================= -->
 <!--Content before waves-->
 <!-- hero section start -->
<section class="hero-wrapper hero-1 hero-3 hero-4 hero-border overflow-hidden">
    <div class="hero-widget">
       <div class="hero-single-slider bg-center bg-cover" style="background-image: url(assets/assets-home/img1/hero/breadcrem.jpg);">
          <div class="containers">
             <div class="row align-items-center">
                <div class="col-12">
                   <div class="hero-content">
                      <h1 style="text-align: center;">NFC Cards</h1>
                   </div>
                </div>
             </div>
          </div>
          <div class="breadcrumb-shape wow fadeInUpBig">
             <img src="{{ asset('assets/assets-home/img1/svg-icon/video-shape.svg')}}" alt="">
          </div>
          <div class="shape-left wow fadeInLeft">
             <img  src="{{ asset('assets/assets-home/img1/shap/shap.png')}}" alt="shape">
          </div>
          <div class="shape-bottom-2 wow fadeInUpBig">
             <img  src="{{ asset('assets/assets-home/img1/shap/shap-2.png')}}" alt="shape">
          </div>
          <div class="breadcrumb-right-element wow fadeInRightBig">
             <img  src="{{ asset('assets/assets-home/img1/svg-icon/right-2.svg')}}" alt="">
          </div>
          <div class="top-element wow fadeInDown">
             <img  src="{{ asset('assets/assets-home/img1/svg-icon/shape-3.svg')}}" alt="">
          </div>
       </div>
    </div>
</section>
 <!-- hero section end -->
 <!-- Start of Refund Policy section
    =============================================  -->
<section class="image">
    <div class="bis-project-feed-btn">
       <div class="bis-portfolio-tab-btn text-center button-group">
          <button class="filter-button  is-checked" data-filter="cus">AI Qrcodes</button>
          <button class="filter-button" data-filter="hor">Horizontal</button>
          <button class="filter-button" data-filter="ver">Vertical</button>
          <button class="filter-button" data-filter="all">All Cards</button>
       </div>
       <br><br>
    </div>
    <div class="iamgivingmarginspacefromfillterbutton"></div>
    <div class="clearfix"></div>
    <!-- Add clearfix to ensure proper layout -->
    <figure data-category="hor">
      <a href="https://m.vcarde.com/product/standard-horizontal-nfc/" target="_blank">
 
       <div class="card1"></div>
       <figcaption>Horizontal 1</figcaption>
    </figure> </a>
    <figure data-category="hor">
      <a href="https://m.vcarde.com/product/standard-horizontal-nfc/" target="_blank">
       <div class="card2"></div>
       <figcaption>Horizontal 2</figcaption>
    </figure> </a>
    <figure data-category="hor">
      <a href="https://m.vcarde.com/product/standard-horizontal-nfc/" target="_blank">
       <div class="card3"></div>
       <figcaption>Horizontal 3</figcaption>
    </figure> </a>
    <figure data-category="hor">
      <a href="https://m.vcarde.com/product/standard-horizontal-nfc/" target="_blank">
       <div class="card4"data-category="hor"></div>
       <figcaption>Horizontal 4</figcaption>
    </figure> </a>
    <figure data-category="hor">
      <a href="https://m.vcarde.com/product/standard-horizontal-nfc/" target="_blank">
       <div class="card5"data-category="hor"></div>
       <figcaption>Horizontal 5</figcaption>
    </figure> </a>
    <figure data-category="hor">
      <a href="https://m.vcarde.com/product/standard-horizontal-nfc/" target="_blank">
       <div class="card6"data-category="hor"></div>
       <figcaption>Horizontal 6</figcaption>
    </figure> </a>
    <figure data-category="hor">
      <a href="https://m.vcarde.com/product/standard-horizontal-nfc/" target="_blank">
       <div class="card7"></div>
       <figcaption>Horizontal 7</figcaption>
    </figure> </a>
    <figure data-category="hor">
      <a href="https://m.vcarde.com/product/standard-horizontal-nfc/" target="_blank">
       <div class="card8"data-category="hor"></div>
       <figcaption>Custom Horizontal 1</figcaption>
    </figure> </a>
    <figure data-category="hor">
      <a href="https://m.vcarde.com/product/standard-horizontal-nfc/" target="_blank">
       <div class="card9"data-category="hor"></div>
       <figcaption>Custom Horizontal 2</figcaption>
    </figure> </a>
    <!-- End of Horizontal Cards section
       =============================================  -->	
    <figure data-category="ver">
<a href="https://m.vcarde.com/product/standard-vertical-nfc/" target="_blank">
       <div class="cardv1"data-category="ver"></div>
       <figcaption>Vertical 1</figcaption>
    </figure> </a>
    <figure data-category="ver">
<a href="https://m.vcarde.com/product/standard-vertical-nfc/" target="_blank">
       <div class="cardv2"data-category="ver"></div>
       <figcaption>Vertical 2</figcaption>
    </figure> </a>
    <figure data-category="ver">
<a href="https://m.vcarde.com/product/standard-vertical-nfc/" target="_blank">
       <div class="cardv3"data-category="ver"></div>
       <figcaption>Vertical 3</figcaption>
    </figure> </a>
    <figure data-category="ver">
<a href="https://m.vcarde.com/product/standard-vertical-nfc/" target="_blank">
       <div class="cardv4"data-category="ver"></div>
       <figcaption>Vertical 4</figcaption>
    </figure> </a>
    <figure data-category="ver">
<a href="https://m.vcarde.com/product/standard-vertical-nfc/" target="_blank">
       <div class="cardv5"data-category="ver"></div>
       <figcaption>Vertical 5</figcaption>
    </figure> </a>
    <figure data-category="ver">
<a href="https://m.vcarde.com/product/standard-vertical-nfc/" target="_blank">
       <div class="cardv6"data-category="ver"></div>
       <figcaption>Vertical 6</figcaption>
    </figure> </a>
    <figure data-category="ver">
<a href="https://m.vcarde.com/product/standard-vertical-nfc/" target="_blank">
       <div class="cardv7"data-category="ver"></div>
       <figcaption>Custom Vertical 1</figcaption>
    </figure> </a>
    <figure data-category="ver">
<a href="https://m.vcarde.com/product/standard-vertical-nfc/" target="_blank">
       <div class="cardv8"data-category="ver"></div>
       <figcaption>Custom Vertical 2</figcaption>
    </figure> </a>
    <figure data-category="ver">
<a href="https://m.vcarde.com/product/standard-vertical-nfc/" target="_blank">
       <div class="cardv9"data-category="ver"></div>
       <figcaption>Custom Vertical 3</figcaption>
    </figure> </a>
    <figure data-category="ver">
<a href="https://m.vcarde.com/product/standard-vertical-nfc/" target="_blank">
       <div class="cardv10"data-category="ver"></div>
       <figcaption>Custom Vertical 4</figcaption>
    </figure> </a>
    <figure data-category="ver">
<a href="https://m.vcarde.com/product/standard-vertical-nfc/" target="_blank">
       <div class="cardv11"data-category="ver"></div>
       <figcaption>Custom Vertical 5</figcaption>
    </figure> </a>
    <figure data-category="ver">
<a href="https://m.vcarde.com/product/standard-vertical-nfc/" target="_blank">
       <div class="cardv12"data-category="ver"></div>
       <figcaption>Custom Vertical 6</figcaption>
    </figure> </a>
    <figure data-category="ver">
<a href="https://m.vcarde.com/product/standard-vertical-nfc/" target="_blank">
       <div class="cardv13"data-category="ver"></div>
       <figcaption>Custom Vertical 7</figcaption>
    </figure> </a>
    <!--
       AI CODES STARTS HERE
    
      -->
   <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai1"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai2"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai3"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai4"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai5"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai6"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai7"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai8"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai9"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai10"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai11"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai12"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai13"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai14"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai15"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai16"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai17"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai18"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai19"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai20"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai21"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai22"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai23"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai24"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai25"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai26"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai27"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai28"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai29"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
    <a href="https://m.vcarde.com/product-category/artistic-qr-nfc/" target="_blank">
      <figure data-category="cus">
       <div class="ai30"data-category="cus"></div>
       <figcaption>Custom By AI</figcaption>
    </figure>
   </a>
</section>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Attach click event handler to filter buttons
        $(".filter-button").click(function () {
            // Remove the 'is-checked' class from all filter buttons
            $(".filter-button").removeClass("is-checked");
    
            // Add the 'is-checked' class to the clicked filter button
            $(this).addClass("is-checked");
    
            var value = $(this).attr('data-filter');
    
            if (value == "all") {
                $('.image > figure').show('1000');
            } else {
                $('.image > figure').not('[data-category="' + value + '"]').hide('3000');
                $('.image > figure').filter('[data-category="' + value + '"]').show('3000');
            }
        });
    
        // Trigger click event for the filter button with data-filter="cus"
        $("[data-filter='cus']").click();
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
     // Function to handle mouseenter event
     function onMouseEnter(element, originalBackgrounds, index) {
         var frontImages = [
     "/assets/assets-home/NFC-Backgrounds/ai-qr/rear/rear1.jpg",
     "/assets/assets-home/NFC-Backgrounds/ai-qr/rear/rear2.jpg",
     "/assets/assets-home/NFC-Backgrounds/ai-qr/rear/rear3.jpg",
     "/assets/assets-home/NFC-Backgrounds/ai-qr/rear/rear4.jpg",
     "/assets/assets-home/NFC-Backgrounds/ai-qr/rear/rear5.jpg",
     "/assets/assets-home/NFC-Backgrounds/ai-qr/rear/rear6.jpg",
     "/assets/assets-home/NFC-Backgrounds/ai-qr/rear/rear7.jpg",
     "/assets/assets-home/NFC-Backgrounds/ai-qr/rear/rear8.jpg"
    ];
         var randomIndex = Math.floor(Math.random() * frontImages.length);
         var randomFrontImage = frontImages[randomIndex];
         element.style.backgroundImage = 'url(' + randomFrontImage + ')';
     }
    
     // Function to handle mouseleave event
     function onMouseLeave(element, originalBackgrounds, index) {
         element.style.backgroundImage = originalBackgrounds[index];
     }
    
     var aiElements = document.querySelectorAll('.ai1, .ai2, .ai3, .ai4, .ai5, .ai6, .ai7, .ai8, .ai9, .ai10, .ai11, .ai12, .ai13, .ai14, .ai15, .ai16, .ai17, .ai18, .ai19, .ai20, .ai21, .ai22, .ai23, .ai24, .ai25, .ai26, .ai27, .ai28, .ai29, .ai30');
     var originalBackgrounds = [];
    
     // Store original background images and add event listeners
     aiElements.forEach(function (element, index) {
         // Storing the computed background image of each element
         originalBackgrounds[index] = getComputedStyle(element).backgroundImage;
         element.addEventListener('mouseenter', function () {
             onMouseEnter(element, originalBackgrounds, index);
         });
         element.addEventListener('mouseleave', function () {
             onMouseLeave(element, originalBackgrounds, index);
         });
     });
    });
    
</script>
@endsection