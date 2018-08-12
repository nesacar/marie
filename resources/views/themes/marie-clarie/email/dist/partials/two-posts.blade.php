<div style="Margin:0px auto;max-width:600px;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
        <tbody>
        <tr>
            <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;vertical-align:top;">
                <!--[if mso | IE]>
                <table role="presentation" border="0" cellpadding="0" cellspacing="0">

                    <tr>

                        <td
                                class="" style="vertical-align:top;width:300px;"
                        >
                <![endif]-->
                <div class="mj-column-per-50 outlook-group-fix"
                     style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                    <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                           style="vertical-align:top;" width="100%">
                        <!-- signle article -->
                        <tr>
                            <td align="center"
                                style="font-size:0px;padding:10px 25px;padding-top:0;padding-bottom:0;word-break:break-word;">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                                       style="border-collapse:collapse;border-spacing:0px;">
                                    <tbody>
                                    <tr>
                                        <td style="width:250px;">
                                            <a href="{{ $post1->link . '?news=' . $newsletter->verification . '&email=' . $subscriber->verification }}" target="_blank">

                                                <img height="auto" src="{{ url($post1->image) }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="250"/>

                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                <div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000;">
                                    <div class="detail">
                                        <a class="detail_cat" href="{{ $post1->blog->first()->link }}">{{ $post1->blog->first()->title }}</a> | <span
                                                class="detail_date">{{ $post1->publish_at->format('d.m.Y.') }}</span></div>
                                    <h2 class="serif">{{ $post1->title }}</h2>
                                    <p class="p">{{ $post1->short }}</p>
                                    <div class="action-footer"><a class="btn" href="{{ $post1->link . '?news=' . $newsletter->verification . '&email=' . $subscriber->verification }}">saznaj više</a></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <!--[if mso | IE]>
                </td>
                <![endif]-->
                <!-- ./single article -->
                <!--[if mso | IE]>
                <td
                        class="" style="vertical-align:top;width:300px;"
                >
                <![endif]-->
                <div class="mj-column-per-50 outlook-group-fix"
                     style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                    <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                           style="vertical-align:top;" width="100%">
                        <!-- signle article -->
                        <tr>
                            <td align="center"
                                style="font-size:0px;padding:10px 25px;padding-top:0;padding-bottom:0;word-break:break-word;">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
                                       style="border-collapse:collapse;border-spacing:0px;">
                                    <tbody>
                                    <tr>
                                        <td style="width:250px;">
                                            <a href="{{ $post2->link . '?news=' . $newsletter->verification . '&email=' . $subscriber->verification }}" target="_blank">
                                                <img height="auto" src="{{ url($post2->image) }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;" width="250" />
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                <div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:13px;line-height:1;text-align:left;color:#000000;">
                                    <div class="detail">
                                        <a class="detail_cat" href="{{ $post2->blog->first()->link }}">{{ $post2->blog->first()->title }}</a> | <span
                                                class="detail_date">{{ $post2->publish_at->format('d.m.Y.') }}</span></div>
                                    <h2 class="serif">{{ $post2->title }}</h2>
                                    <p class="p">{{ $post2->short }}</p>
                                    <div class="action-footer"><a class="btn" href="{{ $post2->link . '?news=' . $newsletter->verification . '&email=' . $subscriber->verification }}">saznaj više</a></div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                <!--[if mso | IE]>
                </td>
                <![endif]-->
                <!-- ./single article -->
                <!--[if mso | IE]>
                </tr>

                </table>
                <![endif]-->
            </td>
        </tr>
        </tbody>
    </table>
</div>
<!--[if mso | IE]>
</td>
</tr>
</table>
<![endif]-->