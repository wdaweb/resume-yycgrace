# 使用者流程
* 首頁
* 後台沒有連結按鈕,要在網址上手動修改即可跳轉後台登入畫面


## index
* 基本資料
* 學歷education
* 經歷experience
* (以上是"歷程事實"；用人體圖像表示? 腦→學歷 手→工作經驗 腳→人生體驗經歷)
* SNS Info (linkdin) (github/codepan/flicker/dribbble/hackmd/medium)
* 技能
* 作品集portfolio

## 學經歷
軟技能:畢展及實習/海外工作經驗:合作能力/應對能力
* 畢展
* 打工度假
* 昇陽建設
* 室內設計技能

## 技能skill(程度圖表/長條圖or圓圈)
* 前端技術front-end
	html/css
	bootstrap
	js/jq/ajax
* 後端技術back-end
	php/mysql/sql
* 視覺設計design
	Photoshop
	Illustrator
* 製圖軟體
	AutoCAD
	SketchUp
	3dMax
* 圖資
	ArcGIS地理資訊系統
* 辦公軟體
	office
* 證照certificate
	網頁設計丙級
	攝影丙級
* 語言能力


## 作品集portfolio
(每個作品所用到的技能比例)
	Graphics
	UI元件練習
        擬物化平面button
    cssAnimation/js小物件
        clock
        calculator
		計算機
		天氣報報
	PHP小物件
        calendar
        login
        invoice
		POS系統(ERP)
		個人英文單字庫
    


## 資料表

INFO:
	名字 info_name
	大頭照 info_pic1/2/3/4/5
	職稱 info_title
	城市 info_city
	自我介紹簡述 info_about

SKILL:
	技能種類 ski_type(ski or expe)
	名稱 ski_name
	檔案名稱 ski_pic(link)
	技能代表色 ski_color

EXP:
	年分 exp_co1_year
	職稱 exp_co1_title
	公司名稱 exp_co1_name
	任職期間 exp_co1_period
	工作內容簡述 exp_co1_event

EDU:
	畢業年分 edu_H.or.U_year
	就讀期間 edu_H.or.U_period
	學校名稱 edu_H.or.U_name
	重要經歷 edu_H.or.U_event


PO MAIN:
	主頁圖片 pomain_svg

PORTFOLIO:
	種類 pofo_type
	標題 pofo_title
	連結 pofo_url
	圖片 pofo_pic
	設計簡述 pofo_content
	(技能比例bar)


**作品資料表
id/type/title/text(url_link)/text(pic_link)/text()/oeder順序
-
(i_a)/pofo_type/pofo_title/pofo_url/pofo_pic/pofo_text



**INFO+POMAIN資料表(無法新增,僅能修改更新)
id/text(/filelink)
-
info_name
info_title
info_city
info_about


info_pic1
info_pic2
info_pic3
info_pic4
info_pic5

pomain_svg





**skill資料表
id/type/text(filelink)/color(補充)/order順序
-
ski_name/ski_type(ski zor expe)/ski_pic(link)/ski_color


**exp+edu資料表
id/type(exp.edu)/year/period/text
-
edu_h_name//edu_h_year/edu_h_period/edu_h_event
edu_u_name//edu_u_year/edu_u_period/edu_u_event
exp_co1_name//exp_co1_year/exp_co1_period/exp_co1_title/exp_co1_event


