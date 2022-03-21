/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     21/04/15 4:20:28 PM                          */
/*==============================================================*/


alter table GHE 
   drop foreign key FK_GHE_GHECUAVEB_VEBAN;

alter table GHE 
   drop foreign key FK_GHE_LOAIGHECU_LOAIGHE;

alter table GHE 
   drop foreign key FK_GHE_LOAIGHECU_PHONGCHI;

alter table PHIM 
   drop foreign key FK_PHIM_THELOAICU_LOAIPHIM;

alter table PHIMCOSUATCHIEU 
   drop foreign key FK_PHIMCOSU_PHIMCOSUA_PHIM;

alter table PHIMCOSUATCHIEU 
   drop foreign key FK_PHIMCOSU_PHIMCOSUA_SUATCHIE;

alter table PHONGCHIEUCUASUATCHIEU 
   drop foreign key FK_PHONGCHI_PHONGCHIE_SUATCHIE;

alter table PHONGCHIEUCUASUATCHIEU 
   drop foreign key FK_PHONGCHI_PHONGCHIE_PHONGCHI;

alter table VAITROCUANHANVIEN 
   drop foreign key FK_VAITROCU_VAITROCUA_NHANVIEN;

alter table VAITROCUANHANVIEN 
   drop foreign key FK_VAITROCU_VAITROCUA_VAITRO;

alter table VEBAN 
   drop foreign key FK_VEBAN_GIAVECUAV_GIAVE;

alter table VEBAN 
   drop foreign key FK_VEBAN_KHACHHANG_KHACHHAN;

alter table VEBAN 
   drop foreign key FK_VEBAN_NHANVIENX_NHANVIEN;

alter table VEBAN 
   drop foreign key FK_VEBAN_SUATCHIEU_SUATCHIE;

drop table if exists DINHDANGPHIM;


alter table GHE 
   drop foreign key FK_GHE_GHECUAVEB_VEBAN;

alter table GHE 
   drop foreign key FK_GHE_LOAIGHECU_LOAIGHE;

alter table GHE 
   drop foreign key FK_GHE_LOAIGHECU_PHONGCHI;

drop table if exists GHE;

drop table if exists GIAVE;

drop table if exists KHACHHANG;

drop table if exists LOAIGHE;

drop table if exists LOAIPHIM;

drop table if exists NHANVIEN;


alter table PHIM 
   drop foreign key FK_PHIM_THELOAICU_LOAIPHIM;

drop table if exists PHIM;


alter table PHIMCOSUATCHIEU 
   drop foreign key FK_PHIMCOSU_PHIMCOSUA_PHIM;

alter table PHIMCOSUATCHIEU 
   drop foreign key FK_PHIMCOSU_PHIMCOSUA_SUATCHIE;

drop table if exists PHIMCOSUATCHIEU;

drop table if exists PHONGCHIEU;


alter table PHONGCHIEUCUASUATCHIEU 
   drop foreign key FK_PHONGCHI_PHONGCHIE_SUATCHIE;

alter table PHONGCHIEUCUASUATCHIEU 
   drop foreign key FK_PHONGCHI_PHONGCHIE_PHONGCHI;

drop table if exists PHONGCHIEUCUASUATCHIEU;

drop table if exists SUATCHIEU;

drop table if exists VAITRO;


alter table VAITROCUANHANVIEN 
   drop foreign key FK_VAITROCU_VAITROCUA_NHANVIEN;

alter table VAITROCUANHANVIEN 
   drop foreign key FK_VAITROCU_VAITROCUA_VAITRO;

drop table if exists VAITROCUANHANVIEN;


alter table VEBAN 
   drop foreign key FK_VEBAN_GIAVECUAV_GIAVE;

alter table VEBAN 
   drop foreign key FK_VEBAN_NHANVIENX_NHANVIEN;

alter table VEBAN 
   drop foreign key FK_VEBAN_KHACHHANG_KHACHHAN;

alter table VEBAN 
   drop foreign key FK_VEBAN_SUATCHIEU_SUATCHIE;

drop table if exists VEBAN;

/*==============================================================*/
/* Table: DINHDANGPHIM                                          */
/*==============================================================*/
create table DINHDANGPHIM
(
   IDDDPHIM             varchar(10) not null  comment '',
   TEN_DD               varchar(30) not null  comment '',
   PHU_THU              int  comment '',
   primary key (IDDDPHIM)
);

/*==============================================================*/
/* Table: GHE                                                   */
/*==============================================================*/
create table GHE
(
   IDGHE                varchar(10) not null  comment '',
   IDPHONG_CHIEU        varchar(10) not null  comment '',
   IDVE_BAN             varchar(10) not null  comment '',
   IDLOAI_GHE           varchar(10) not null  comment '',
   DAY                  char(1) not null  comment '',
   COT                  int not null  comment '',
   TEN_GHE              varchar(20) not null  comment '',
   DA_CHON              blob not null  comment '',
   primary key (IDGHE)
);

/*==============================================================*/
/* Table: GIAVE                                                 */
/*==============================================================*/
create table GIAVE
(
   IDGIA_VE             varchar(10) not null  comment '',
   TEN_VE               varchar(30) not null  comment '',
   DON_GIA              int not null  comment '',
   primary key (IDGIA_VE)
);

/*==============================================================*/
/* Table: KHACHHANG                                             */
/*==============================================================*/
create table KHACHHANG
(
   IDKHACH_HANG         varchar(10) not null  comment '',
   HO_TEN               varchar(50) not null  comment '',
   DOB                  date not null  comment '',
   MAT_KHAU             varchar(30) not null  comment '',
   SDT                  numeric(10,0) not null  comment '',
   GIOI_TINH            blob not null  comment '',
   EMAIL                varchar(50) not null  comment '',
   primary key (IDKHACH_HANG)
);

/*==============================================================*/
/* Table: LOAIGHE                                               */
/*==============================================================*/
create table LOAIGHE
(
   IDLOAI_GHE           varchar(10) not null  comment '',
   TEN_LOAI_GHE         varchar(20) not null  comment '',
   PHU_THU              int  comment '',
   primary key (IDLOAI_GHE)
);

/*==============================================================*/
/* Table: LOAIPHIM                                              */
/*==============================================================*/
create table LOAIPHIM
(
   IDLOAI_PHIM          varchar(10) not null  comment '',
   TEN_LP               varchar(100) not null  comment '',
   primary key (IDLOAI_PHIM)
);

/*==============================================================*/
/* Table: NHANVIEN                                              */
/*==============================================================*/
create table NHANVIEN
(
   IDNHAN_VIEN          varchar(10) not null  comment '',
   HO_VA_TEN            varchar(50) not null  comment '',
   MAT_KHAU             varchar(30) not null  comment '',
   GIOI_TINH            blob not null  comment '',
   DOB                  date not null  comment '',
   SDT                  numeric(10,0) not null  comment '',
   EMAIL                varchar(50) not null  comment '',
   primary key (IDNHAN_VIEN)
);

/*==============================================================*/
/* Table: PHIM                                                  */
/*==============================================================*/
create table PHIM
(
   IDPHIM               varchar(10) not null  comment '',
   IDLOAI_PHIM          varchar(10) not null  comment '',
   TEN_PHIM             varchar(100) not null  comment '',
   THOI_LUONG           int not null  comment '',
   GIOI_HAN_TUOI        int not null  comment '',
   NGAY_CHIEU           date not null  comment '',
   QUOC_GIA             varchar(50) not null  comment '',
   TOM_TAT              longtext not null  comment '',
   primary key (IDPHIM)
);

/*==============================================================*/
/* Table: PHIMCOSUATCHIEU                                       */
/*==============================================================*/
create table PHIMCOSUATCHIEU
(
   IDPHIM               varchar(10) not null  comment '',
   IDSUAT_CHIEU         varchar(10) not null  comment '',
   primary key (IDPHIM, IDSUAT_CHIEU)
);

/*==============================================================*/
/* Table: PHONGCHIEU                                            */
/*==============================================================*/
create table PHONGCHIEU
(
   IDPHONG_CHIEU        varchar(10) not null  comment '',
   SO_DAY               int not null  comment '',
   SO_COT               int not null  comment '',
   primary key (IDPHONG_CHIEU)
);

/*==============================================================*/
/* Table: PHONGCHIEUCUASUATCHIEU                                */
/*==============================================================*/
create table PHONGCHIEUCUASUATCHIEU
(
   IDSUAT_CHIEU         varchar(10) not null  comment '',
   IDPHONG_CHIEU        varchar(10) not null  comment '',
   primary key (IDSUAT_CHIEU, IDPHONG_CHIEU)
);

/*==============================================================*/
/* Table: SUATCHIEU                                             */
/*==============================================================*/
create table SUATCHIEU
(
   IDSUAT_CHIEU         varchar(10) not null  comment '',
   GIOBD                time not null  comment '',
   GIOKT                time not null  comment '',
   NGAY_CHIEU           date not null  comment '',
   primary key (IDSUAT_CHIEU)
);

/*==============================================================*/
/* Table: VAITRO                                                */
/*==============================================================*/
create table VAITRO
(
   IDVAI_TRO            varchar(10) not null  comment '',
   TEN_VT               varchar(50) not null  comment '',
   primary key (IDVAI_TRO)
);

/*==============================================================*/
/* Table: VAITROCUANHANVIEN                                     */
/*==============================================================*/
create table VAITROCUANHANVIEN
(
   IDNHAN_VIEN          varchar(10) not null  comment '',
   IDVAI_TRO            varchar(10) not null  comment '',
   primary key (IDNHAN_VIEN, IDVAI_TRO)
);

/*==============================================================*/
/* Table: VEBAN                                                 */
/*==============================================================*/
create table VEBAN
(
   IDVE_BAN             varchar(10) not null  comment '',
   IDKHACH_HANG         varchar(10) not null  comment '',
   IDSUAT_CHIEU         varchar(10) not null  comment '',
   IDGIA_VE             varchar(10) not null  comment '',
   IDNHAN_VIEN          varchar(10) not null  comment '',
   NGAY_BAN             date not null  comment '',
   TONG_THANH_TOAN      int not null  comment '',
   primary key (IDVE_BAN)
);

alter table GHE add constraint FK_GHE_GHECUAVEB_VEBAN foreign key (IDVE_BAN)
      references VEBAN (IDVE_BAN);

alter table GHE add constraint FK_GHE_LOAIGHECU_LOAIGHE foreign key (IDLOAI_GHE)
      references LOAIGHE (IDLOAI_GHE);

alter table GHE add constraint FK_GHE_LOAIGHECU_PHONGCHI foreign key (IDPHONG_CHIEU)
      references PHONGCHIEU (IDPHONG_CHIEU);

alter table PHIM add constraint FK_PHIM_THELOAICU_LOAIPHIM foreign key (IDLOAI_PHIM)
      references LOAIPHIM (IDLOAI_PHIM);

alter table PHIMCOSUATCHIEU add constraint FK_PHIMCOSU_PHIMCOSUA_PHIM foreign key (IDPHIM)
      references PHIM (IDPHIM);

alter table PHIMCOSUATCHIEU add constraint FK_PHIMCOSU_PHIMCOSUA_SUATCHIE foreign key (IDSUAT_CHIEU)
      references SUATCHIEU (IDSUAT_CHIEU);

alter table PHONGCHIEUCUASUATCHIEU add constraint FK_PHONGCHI_PHONGCHIE_SUATCHIE foreign key (IDSUAT_CHIEU)
      references SUATCHIEU (IDSUAT_CHIEU);

alter table PHONGCHIEUCUASUATCHIEU add constraint FK_PHONGCHI_PHONGCHIE_PHONGCHI foreign key (IDPHONG_CHIEU)
      references PHONGCHIEU (IDPHONG_CHIEU);

alter table VAITROCUANHANVIEN add constraint FK_VAITROCU_VAITROCUA_NHANVIEN foreign key (IDNHAN_VIEN)
      references NHANVIEN (IDNHAN_VIEN);

alter table VAITROCUANHANVIEN add constraint FK_VAITROCU_VAITROCUA_VAITRO foreign key (IDVAI_TRO)
      references VAITRO (IDVAI_TRO);

alter table VEBAN add constraint FK_VEBAN_GIAVECUAV_GIAVE foreign key (IDGIA_VE)
      references GIAVE (IDGIA_VE);

alter table VEBAN add constraint FK_VEBAN_KHACHHANG_KHACHHAN foreign key (IDKHACH_HANG)
      references KHACHHANG (IDKHACH_HANG);

alter table VEBAN add constraint FK_VEBAN_NHANVIENX_NHANVIEN foreign key (IDNHAN_VIEN)
      references NHANVIEN (IDNHAN_VIEN);

alter table VEBAN add constraint FK_VEBAN_SUATCHIEU_SUATCHIE foreign key (IDSUAT_CHIEU)
      references SUATCHIEU (IDSUAT_CHIEU);

