CREATE TABLE `dbcorcordium`.`cor_info` ਍⠀怀椀搀怀 䤀一吀⠀㠀⤀ 䄀唀吀伀开䤀一䌀刀䔀䴀䔀一吀 倀刀䤀䴀䄀刀夀 䬀䔀夀 䌀伀䴀䴀䔀一吀 ✀䐀瓅ᓇ➵ഀഀ
, `start_date` VARCHAR(14) NOT NULL COMMENT '공연시작시간'਍Ⰰ 怀攀渀搀开搀愀琀攀怀 嘀䄀刀䌀䠀䄀刀⠀㄀㐀⤀ 一伀吀 一唀䰀䰀 䌀伀䴀䴀䔀一吀 ✀죅Ⴙ�ӂ➬ഀഀ
, `show_title` VARCHAR(250) NOT NULL COMMENT '공연제목'਍Ⰰ 怀琀栀攀愀琀攀爀开渀洀怀 嘀䄀刀䌀䠀䄀刀⠀㈀㔀　⤀ 一伀吀 一唀䰀䰀 䌀伀䴀䴀䔀一吀 ✀ꗅ瓇蓇➹ഀഀ
, `theater_title` VARCHAR(250) NOT NULL COMMENT '극단이름'਍Ⰰ 怀搀椀爀攀挀琀攀爀开渀洀怀 嘀䄀刀䌀䠀䄀刀⠀㈀㔀　⤀ 一伀吀 一唀䰀䰀 䌀伀䴀䴀䔀一吀 ✀鄀鳅瓍蓇➹ഀഀ
, `reservation_url` VARCHAR(100) NOT NULL COMMENT '예매링크'਍Ⰰ 怀挀漀渀琀攀渀琀开甀爀氀怀 嘀䄀刀䌀䠀䄀刀⠀㄀　　⤀ 一伀吀 一唀䰀䰀 䌀伀䴀䴀䔀一吀 ✀ꓒꃂ곑솹油忐僎⃑⟎ഀഀ
, `content_nm` VARCHAR(100) NOT NULL COMMENT '컨텐츠명'਍Ⰰ 怀椀洀最开甀爀氀怀 嘀䄀刀䌀䠀䄀刀⠀㄀　　⤀ 一伀吀 一唀䰀䰀 䌀伀䴀䴀䔀一吀 ✀琀삻쇉油⟐ഀഀ
, `reg_id` VARCHAR(25) NOT NULL COMMENT '작성자'਍Ⰰ 怀爀攀最开搀琀怀 嘀䄀刀䌀䠀䄀刀⠀㄀㐀⤀ 一伀吀 一唀䰀䰀 䌀伀䴀䴀䔀一吀 ✀鄀㇇糁�⟂ഀഀ
, `mod_id` VARCHAR(25) NOT NULL COMMENT '수정자'਍Ⰰ 怀洀漀搀开搀琀怀 嘀䄀刀䌀䠀䄀刀⠀㄀㐀⤀ 一伀吀 一唀䰀䰀 䌀伀䴀䴀䔀一吀 ✀᠀ᗂ糈�⟂ഀഀ
, `sts` CHAR(1) NOT NULL DEFAULT 'C' COMMENT '상태'਍Ⰰ 怀爀攀洀怀 嘀䄀刀䌀䠀䄀刀⠀㈀㔀　⤀ഀഀ
)਍ഀഀ
;਍ഀഀ
਍䤀一匀䔀刀吀 䤀一吀伀 怀搀戀挀漀爀挀漀爀搀椀甀洀怀⸀怀挀漀爀开椀渀昀漀怀 ⠀ഀഀ
`start_date` ,਍怀攀渀搀开搀愀琀攀怀 Ⰰഀഀ
`show_title` ,਍怀琀栀攀愀琀攀爀开渀洀怀 Ⰰഀഀ
`theater_title` ,਍怀搀椀爀攀挀琀攀爀开渀洀怀 Ⰰഀഀ
`reservation_url` ,਍怀挀漀渀琀攀渀琀开甀爀氀怀 Ⰰഀഀ
`content_nm` ,਍怀椀洀最开甀爀氀怀 Ⰰഀഀ
`reg_id` ,਍怀爀攀最开搀琀怀 Ⰰഀഀ
`mod_id` ,਍怀洀漀搀开搀琀怀 Ⰰഀഀ
`sts` ,਍怀爀攀洀怀 ഀഀ
)਍嘀䄀䰀唀䔀匀 ⠀ഀഀ
'20150118181100' ਍Ⰰ ✀㈀　㄀㔀　㄀㌀　㄀㠀㄀㄀　　✀ഀഀ
, '청춘여행자'਍Ⰰ ✀豈₲觅郕⟇ഀഀ
, '동숭무대 소극장'਍Ⰰ ✀鄀忇䀀삮⃉⃁鳅忍琀Ç냉⟆ഀഀ
, 'http://www.naver.com'਍Ⰰ ✀栀琀琀瀀㨀⼀⼀挀漀爀挀漀爀搀椀甀洀⸀琀椀猀琀漀爀礀⸀挀漀洀⼀攀渀琀爀礀⼀豈ⶲ觅郕귇飌ⷍ觅郕⟇ഀഀ
, '극단 여행자_청춘 여행자', 'http://www.daum.com'਍Ⰰ ✀爀漀漀琀✀ഀഀ
, '20150118181400'਍Ⰰ ✀爀漀漀琀✀ഀഀ
, '20150118181400'਍Ⰰ ✀䌀✀ഀഀ
, '' ਍⤀ ഀഀ
਍㬀ഀഀ
਍ഀഀ
select * from cor_info